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

class Prices extends Entity
{
    protected static string $tableName = 'pricing_plans';
    protected static string $keyColumn = 'plan_id';

    /**
     * Render all pricing plans
     */
    public function renderPrices(): void
    {
        $stmt = self::$db->query(
            "SELECT * FROM " . static::$tableName . " ORDER BY plan_id ASC"
        );

        while ($plan = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $plan_id     = (int) $plan['plan_id'];
            $title       = htmlspecialchars($plan['title'], ENT_QUOTES);
            $button_text = htmlspecialchars($plan['button_text'], ENT_QUOTES);
            $is_featured = (int) $plan['is_featured'];

            // Price logic
            if (!empty($plan['price'])) {
                $price = "€" . number_format($plan['price'], 0);
            } else {
                $price = htmlspecialchars($plan['price_text'], ENT_QUOTES);
            }

            $featuredClass = $is_featured ? " featured" : "";
            $premiumClass  = ($title === 'Website Care') ? " premium-care" : "";
            $cardClass     = $featuredClass . $premiumClass;

            // Badge logic
            $badgeText = "";
            if ($title === 'Business Website') {
                $badgeText = "Most Popular";
            } elseif ($title === 'Website Care') {
                $badgeText = "Recommended";
            }

            echo "<div class='pricing-card{$cardClass}'>";

            // Display badge if exists
            if (!empty($badgeText)) {
                echo "<span class='pricing-badge'>{$badgeText}</span>";
            }

            echo "<h4>{$title}</h4>";
            echo "<p class='price'>{$price}</p>";
            echo "<ul>";

            // Fetch features as before
            $featureStmt = self::$db->prepare(
                "SELECT feature_text 
                FROM pricing_features 
                WHERE plan_id = :plan_id 
                ORDER BY sort_order ASC"
            );
            $featureStmt->execute(['plan_id' => $plan_id]);

            while ($feature = $featureStmt->fetch(PDO::FETCH_ASSOC)) {
                $feature_text = htmlspecialchars($feature['feature_text'], ENT_QUOTES);
                echo "<li>✔ {$feature_text}</li>";
            }

            echo "</ul>";
            echo "<a href='#contact' class='pricing-btn'>{$button_text}</a>";
            echo "</div>";
        }
    }
}