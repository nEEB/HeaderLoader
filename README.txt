Header Loader
*************
Nette component loading scripts and styles to support linking of files widget calls.

Template:
<!-- CSS style -->
  {widget headerloader:css 'basePath', 'static/css/', array('style.css'),'All'}
<!-- jqplot plugins -->        
  {widget headerloader:js 'basePath', 'static/js/jqplot/plugins/', array('jqplot.highlighter.min.js', 'jqplot.categoryAxisRenderer.min.js', 'jqplot.barRenderer.min.js', 'jqplot.pointLabels.min.js' )}        