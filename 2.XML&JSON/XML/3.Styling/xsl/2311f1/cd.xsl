<?xml version="1.0"  encoding ="UTF-8" ?>
<xsl:stylesheet version="1.0 " xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:template match="/">
       <html>
        
           <body>
            <h1>My cd collection</h1>
            <table border="1">
                <tr>
                    <th>title</th>
                    <th>artist</th>
                    <th>country</th>
                    <th>company</th>
                    <th>price</th>
                    <th>year</th>
                </tr>
                <xsl:for-each select="catelog/cd">
                <xsl:choose> 
                    <xsl:when test="artist='Okasha'"> 
                <tr bgcolor="cyan">
                    <td> <xsl:value-of select="title"/></td>
                    <td> <xsl:value-of select="artist"/></td>
                    <td> <xsl:value-of select="country"/></td>
                    <td> <xsl:value-of select="company"/></td>
                    <td> <xsl:value-of select="price"/></td>
                    <td> <xsl:value-of select="year"/></td>
                </tr>
            </xsl:when>
            <xsl:otherwise>
                <tr bgcolor="YELLOW">
                    <td> <xsl:value-of select="title"/></td>
                    <td> <xsl:value-of select="artist"/></td>
                    <td> <xsl:value-of select="country"/></td>
                    <td> <xsl:value-of select="company"/></td>
                    <td> <xsl:value-of select="price"/></td>
                    <td> <xsl:value-of select="year"/></td>
                </tr>



            </xsl:otherwise>
            </xsl:choose> 
            </xsl:for-each>
            </table>

           </body>
       </html>
   </xsl:template>
</xsl:stylesheet>