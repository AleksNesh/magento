$j(document).ready(function() {
   $j('.filter-toggle').click(function() {
       $j(this).toggleClass('active-filter');
       console.log('1');
   });
    $j('.block-title').click(function() {
        $j('.block-content').toggleClass('active-content');
        $j('.open-close').toggleClass('active-content');
    });
});