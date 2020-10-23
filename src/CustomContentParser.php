<?php

namespace SaazeSite;

use Saaze\Content\MarkdownContentParser;

class CustomContentParser extends MarkdownContentParser
{
	/**
	 * @param string $content
	 * @return string
	 */
	public function toHtml($content)
	{
		$content = parent::toHtml($content);

		$content = preg_replace('/<pre><code>/', '<div class="card card-sm docs-card mb-6"><div class="card-footer"><code class="highlight">', $content);
		$content = preg_replace('/<pre><code class=\"(.*?)\">/', '<div class="card card-sm docs-card mb-6"><div class="card-footer"><code class="highlight $1">', $content);
		$content = preg_replace('/<\/code><\/pre>/', '</code></div></div>', $content);

		return $content;
	}
}