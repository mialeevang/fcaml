<script>
/* create <style id="light-css"> element with styles */
var mlvfcamllightmode = document.createElement('style');
mlvfcamllightmode.id = 'light-css';
mlvfcamllightmode.innerHTML = 'body, html, #mapp-fixed, .mapp-title div span { background-color: #f5f5f5; } #close-fixed { background-color: #000000; opacity: .4; } .site-note b, .mapp-address b, .mapp-note li b, .mapp-addnote b, .mapp-note li u, .mapp-addnote u { color: #7F0000; } .mapp-address, .mapp-addnote { color: #000000; } .site-note, .mapp-address span, .mapp-title, .mapp-filter, .mapp-note, .mapp-table th, .mapp-table td { color: #000000; background-color: #dddddd; }  .mapp-table td a { color: #ffffff; background-color: #999999; } .mapp-table td a:hover { background-color: #666666; }  #header, #num-apt-mapped, #mapped .mapp-title:hover, .mapp-address span:hover, .mapp-table tr:hover td { background-color: #cccccc; } #header { border-bottom: solid 1px #000000; }';

/* find the exisiting <style> within the <head> */
var head = document.querySelector('head');
var style = head.querySelector('style');

/* light switch element */
var mlvfcamllmon = document.getElementById("light-on");
var mlvfcamllmoff = document.getElementById("light-off");
  
/* remember state - light mode on */
if (localStorage.getItem('mlvfcaml-light-mode') === 'on') {
	style.parentNode.insertBefore(mlvfcamllightmode, style.nextSibling);

    mlvfcamllmon.style.display = "none";
    mlvfcamllmoff.style = "";
}
  
/* light mode switch on */
document.getElementById("light-on").addEventListener("click", function() {
	style.parentNode.insertBefore(mlvfcamllightmode, style.nextSibling);

    mlvfcamllmon.style.display = "none";
    mlvfcamllmoff.style = "";
    localStorage.setItem("mlvfcaml-light-mode", "on");
});
  
/* light mode switch off  */
document.getElementById("light-off").addEventListener("click", function() {
    document.getElementById("light-css").remove();
    mlvfcamllmon.style = "";
    mlvfcamllmoff.style.display = "none";
    localStorage.setItem("mlvfcaml-light-mode", "off");
});
</script>