<?php

declare(strict_types=1);

/**
 * AIConfig.php
 *
 * Handles configuration settings for Mirnes AI.
 *
 * Responsible for:
 * - OpenAI API configuration
 * - AI model settings
 * - Token limits
 * - Temperature settings
 * - AI feature switches
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

namespace Classes\AI;

use RuntimeException;

class AIConfig
{
    /**
     * OpenAI API key
     */
    private string $apiKey;

    /**
     * OpenAI model name
     */
    private string $model;

    /**
     * Maximum response tokens
     */
    private int $maxTokens;

    /**
     * AI creativity level
     */
    private float $temperature;

    /**
     * Enable AI chat
     */
    private bool $enabled;

    /**
     * System prompt
     */
    private string $systemPrompt;


    /**
     * Constructor
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->load($config);

        $this->validate();
    }


    /**
     * Load configuration values
     *
     * @param array $config
     * @return void
     */
    private function load(array $config): void
    {
        $this->apiKey = $config['api_key']
            ?? $_ENV['OPENAI_API_KEY']
            ?? '';

        $this->model = $config['model']
            ?? $_ENV['OPENAI_MODEL']
            ?? 'gpt-5-mini';

        $this->maxTokens = (int) (
            $config['max_tokens']
            ?? $_ENV['OPENAI_MAX_TOKENS']
            ?? 1000
        );

        $this->temperature = (float) (
            $config['temperature']
            ?? $_ENV['OPENAI_TEMPERATURE']
            ?? 0.7
        );

        $this->enabled = (bool) (
            $config['enabled']
            ?? true
        );

        $this->systemPrompt = $config['system_prompt']
            ?? $this->defaultSystemPrompt();
    }


    /**
     * Validate configuration
     *
     * @return void
     */
    private function validate(): void
    {
        if ($this->enabled && empty($this->apiKey)) {
            throw new RuntimeException(
                'OpenAI API key is missing.'
            );
        }

        if ($this->maxTokens <= 0) {
            throw new RuntimeException(
                'Invalid AI token limit.'
            );
        }

        if ($this->temperature < 0 || $this->temperature > 2) {
            throw new RuntimeException(
                'Temperature must be between 0 and 2.'
            );
        }
    }


    /**
     * Default AI behavior prompt
     *
     * @return string
     */
    private function defaultSystemPrompt(): string
    {
        return <<<PROMPT
You are Mirnes AI.

You represent Mirnes Glamočić,
a Full-Stack Web Developer and UI/UX Designer.

Your purpose is to help visitors of mirnesglamocic.com.

You can answer questions about:

- Website Development
- UI/UX Design
- WordPress Development
- SEO Optimization
- Website Performance
- Website Maintenance
- Custom Web Applications
- Portfolio Projects
- Technologies
- Development Process

Rules:

1. Answer only using available website information.
2. Do not invent prices, projects, clients, or experience.
3. If information is unavailable, recommend contacting Mirnes directly.
4. Be professional, friendly, and concise.
5. Encourage visitors to discuss their project when appropriate.

PROMPT;
    }


    /**
     * Get OpenAI API key
     *
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }


    /**
     * Get AI model
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }


    /**
     * Get maximum tokens
     *
     * @return int
     */
    public function getMaxTokens(): int
    {
        return $this->maxTokens;
    }


    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }


    /**
     * Check if AI is enabled
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }


    /**
     * Get system prompt
     *
     * @return string
     */
    public function getSystemPrompt(): string
    {
        return $this->systemPrompt;
    }


    /**
     * Return configuration array
     *
     * Useful for debugging
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'model' => $this->model,
            'max_tokens' => $this->maxTokens,
            'temperature' => $this->temperature,
            'enabled' => $this->enabled,
        ];
    }
}