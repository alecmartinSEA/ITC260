
<a href="mariners">Mariners</a>
<a href="boats">Boats</a>
<a href="Kittens">Kittens</a>

<?
$this->load->view($this->config->item('theme') . 'header');



foreach($pictures as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";

    $picTitle = $pic->title;

    echo "<p>$picTitle</p>";
 
}
$this->load->view($this->config->item('theme') . 'footer');
?>