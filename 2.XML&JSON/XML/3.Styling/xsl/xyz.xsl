<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
    <head>
        <title>XML XSL Example</title>
        <style type="text/css">
        body {
            margin:10px;
            background-color:#ccff00;
            font-family:verdana,helvetica,sans-serif;
        }

        .stu-name {
            display:block;
            font-weight:bold;
        }

        .stu-hobby {
            display:block;
            color:#636363;
            font-size:small;
            font-style:italic;
        }
        </style>
    </head>
    <body>
        <h2>1807c1 Girls</h2>
        <p>Hey, it's about our favorite girls ;-) </p>
          <xsl:apply-templates/>
    </body>
</html>
</xsl:template>

<xsl:template match="stu">
    <div class="stu-name"><xsl:value-of select="name"/></div>
    <div class="stu-hobby"><xsl:value-of select="hobby"/></div>
</xsl:template>

</xsl:stylesheet>