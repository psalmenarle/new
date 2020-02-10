$rss = new DOMDocument();
$rss->load("https://www.nasa.gov/rss/dyn/breaking_news.rss");

$feed = array();
foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array ( 
        'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
        'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
        'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
        'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
        );
    array_push($feed, $item);
}
