<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>

            </head>
            <body bgcolor="maroon">
                <!-- <h1>Books</h1> -->
                <table border="1" align ="center" cellspacing ="5" cellpadding ="5">
                    <tr bgcolor="beige">
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN_No</th>
                    <th>Price</th>
                    <th>Edition</th>
                    <th>PublishDate</th>
                    </tr>
               <xsl:for-each select="Books/Book">
                <xsl:if test="Price &gt; 1000">
                    <tr bgcolor="cyan">
                        <td> <xsl:value-of select="Title"/> </td>
                        <td> <xsl:value-of select="Author"/> </td>
                        <td> <xsl:value-of select="ISBN_No"/> </td>
                        <td> <xsl:value-of select="Price"/> </td>
                        <td> <xsl:value-of select="Edition"/> </td>
                        <td> <xsl:value-of select="PublishDate"/> </td>
        
                    </tr>
                    </xsl:if>
                <xsl:if test="Price &lt; 1000">
                    <tr bgcolor="lightgreen">
                        <td> <xsl:value-of select="Title"/> </td>
                        <td> <xsl:value-of select="Author"/> </td>
                        <td> <xsl:value-of select="ISBN_No"/> </td>
                        <td> <xsl:value-of select="Price"/> </td>
                        <td> <xsl:value-of select="Edition"/> </td>
                        <td> <xsl:value-of select="PublishDate"/> </td>
        
                    </tr>
                    </xsl:if>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>