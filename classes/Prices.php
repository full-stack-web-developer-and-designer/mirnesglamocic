<?php
/**
 * Prices.php
 * 
 * Handles fetching and rendering pricing plans from the database.
 * Each plan includes title, price, features, and CTA button.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class Prices extends Entity
{
    /**
     * Database table name.
     */
    protected static string $tableName = 'pricing_plans';


    /**
     * Primary key column.
     */
    protected static string $keyColumn = 'plan_id';



    /**
     * Render all pricing plans.
     */
    public function renderPrices(): void
    {
        $db = DB::getInstance();


        $stmt = $db->query(
            "SELECT *
             FROM " . static::$tableName . "
             ORDER BY plan_id ASC"
        );


        while ($plan = $stmt->fetch(PDO::FETCH_ASSOC)) {


            $planId = (int) $plan['plan_id'];


            $title = htmlspecialchars(
                $plan['title'],
                ENT_QUOTES,
                'UTF-8'
            );


            $buttonText = htmlspecialchars(
                $plan['button_text'],
                ENT_QUOTES,
                'UTF-8'
            );


            $isFeatured = (int) $plan['is_featured'];



            /*
             * Price logic
             */
            if (!empty($plan['price'])) {

                $price = "€" .
                    number_format(
                        (float) $plan['price'],
                        0
                    );

            } else {

                $price = htmlspecialchars(
                    $plan['price_text'] ?? '',
                    ENT_QUOTES,
                    'UTF-8'
                );
            }



            /*
             * CSS classes
             */
            $featuredClass = $isFeatured
                ? ' featured'
                : '';


            $premiumClass = ($title === 'Website Care')
                ? ' premium-care'
                : '';


            $cardClass =
                $featuredClass .
                $premiumClass;



            /*
             * Badge logic
             */
            $badgeText = '';


            if ($title === 'Business Website') {

                $badgeText = 'Most Popular';

            } elseif ($title === 'Website Care') {

                $badgeText = 'Recommended';
            }



            echo "<div class='pricing-card{$cardClass}'>";



            if ($badgeText !== '') {

                echo "<span class='pricing-badge'>"
                    . htmlspecialchars(
                        $badgeText,
                        ENT_QUOTES,
                        'UTF-8'
                    )
                    . "</span>";
            }



            echo "<h4>{$title}</h4>";

            echo "<p class='price'>{$price}</p>";

            echo "<ul>";



            /*
             * Fetch pricing features
             */
            $featureStmt = $db->prepare(
                "SELECT feature_text
                 FROM pricing_features
                 WHERE plan_id = :plan_id
                 ORDER BY sort_order ASC"
            );


            $featureStmt->execute([
                'plan_id' => $planId
            ]);



            while (
                $feature = $featureStmt->fetch(
                    PDO::FETCH_ASSOC
                )
            ) {


                $featureText = htmlspecialchars(
                    $feature['feature_text'],
                    ENT_QUOTES,
                    'UTF-8'
                );


                echo "<li>✔ {$featureText}</li>";
            }



            echo "</ul>";

            echo "<a href='#contact' class='pricing-btn'>"
                . $buttonText .
                "</a>";

            echo "</div>";
        }
    }
}