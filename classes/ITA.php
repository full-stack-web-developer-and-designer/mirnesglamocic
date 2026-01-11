<?php

class ITA extends Entity
{
    protected static string $tableName = 'ita_certificate';
    protected static string $keyColumn = 'id';

    // DB columns (untyped on purpose)
    public $id;
    public $href;
    public $img_400;
    public $img_300;
    public $img_250;
    public $img_200;
    public $img_180;
    public $img_170;
    public $img;
    public $alt;

    public function renderCertificates(): void
    {
        foreach (self::getAll() as $row) {

            $id   = preg_replace('/[^a-z0-9_-]/i', '', (string) $row->id);
            $href = htmlspecialchars($row->href, ENT_QUOTES, 'UTF-8');

            $img_400 = htmlspecialchars($row->img_400, ENT_QUOTES, 'UTF-8');
            $img_300 = htmlspecialchars($row->img_300, ENT_QUOTES, 'UTF-8');
            $img_250 = htmlspecialchars($row->img_250, ENT_QUOTES, 'UTF-8');
            $img_200 = htmlspecialchars($row->img_200, ENT_QUOTES, 'UTF-8');
            $img_180 = htmlspecialchars($row->img_180, ENT_QUOTES, 'UTF-8');
            $img_170 = htmlspecialchars($row->img_170, ENT_QUOTES, 'UTF-8');
            $img     = htmlspecialchars($row->img, ENT_QUOTES, 'UTF-8');
            $alt     = htmlspecialchars($row->alt, ENT_QUOTES, 'UTF-8');

            echo <<<HTML
<article id="$id" class="cert-item">
    <a href="./images/BIG/$href" data-lightbox="ita">
        <picture class="ita">
            <source srcset="$img_400" type="image/webp" media="(min-width: 962px)">
            <source srcset="$img_300" type="image/webp" media="(min-width: 832px)">
            <source srcset="$img_250" type="image/webp" media="(min-width: 621px)">
            <source srcset="$img_200" type="image/webp" media="(min-width: 521px)">
            <source srcset="$img_180" type="image/webp" media="(min-width: 430px)">
            <source srcset="$img_170" type="image/webp" media="(min-width: 389px)">
            <source srcset="$img_300" type="image/webp" media="(max-width: 388px)">
            <img decoding="async" src="$img" width="400" height="565" loading="lazy" alt="$alt">
        </picture>
    </a>
</article>
HTML;
        }
    }
}
