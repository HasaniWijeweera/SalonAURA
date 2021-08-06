//pdf
function createPDF() {
    // get elements of report data
    var report1 = document.getElementById("report1").innerHTML;

    var style = "<style>";
    style = style + "table {width: 100%;font: 17px Calibri;} body{font-size:12px;}";
    style = style +"table, th, td {border: solid 1px #DDD;color: black; border-collapse:collapse;";
style = style + "padding: 2px 3px;text-align: center;}";
    style = style + "</style>";

    // CREATE A WINDOW OBJECT.
    var win = window.open("", "", "height=700,width=700");

    win.document.write("<title>Report 1</title>"); // <title> FOR PDF HEADER.
    win.document.write(style); // ADD STYLE INSIDE THE HEAD TAG.
    win.document.write("</head>");
   win.document.write(report1);
    // THE TABLE CONTENTS INSIDE THE BODY TAG.
    win.document.write("</body></html>");

   win.document.close(); // CLOSE THE CURRENT WINDOW.

    win.print(); // PRINT THE CONTENTS.
};