<?php
class Support extends Entity
{
    protected static string $tableName = 'support';
    protected static string $keyColumn = 'support_id';

    public int $support_id;
    public int $page_id;
    public string $href = '';
    public string $aria_label = '';
    public string $icon_name = '';

    public function render(): string
    {
       return '
<span class="icon_box">
    <a class="social-icon"
       href="' . htmlspecialchars($this->href, ENT_QUOTES, 'UTF-8') . '"
       title="' . htmlspecialchars($this->aria_label, ENT_QUOTES, 'UTF-8') . '"
       aria-label="' . htmlspecialchars($this->aria_label, ENT_QUOTES, 'UTF-8') . '"
       target="_blank" rel="noopener noreferrer">
        <svg class="icon social-icon" aria-hidden="true">
            <use href="#icon-' . htmlspecialchars($this->icon_name, ENT_QUOTES, 'UTF-8') . '"></use>
        </svg>
    </a>
</span>';

    }
}