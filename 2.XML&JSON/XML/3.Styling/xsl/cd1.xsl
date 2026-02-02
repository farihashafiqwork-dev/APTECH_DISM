<?xml version="1.0"  encoding ="UTF-8" ?>
<xsl:stylesheet version="1.0 " xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:template match="/">
       <html>
           <body>
            <h1>CD</h1>
            <table border="1">
                <tr bgcolor="green">
                <th>Title</th>
                <th>Artist</th>
                <th>Country</th>
                <th>Company</th>
                <th>Price</th>
                <th>year</th>
            </tr>
           <xsl:for-each select="CATALOG/CD">
            <xsl:if test="price &lt;  10">
            <tr bgcolor="pink">
                <td><xsl:value-of select="TITLE"/></td>
                <td><xsl:value-of select="ARTIST"/></td>
                <td><xsl:value-of select="COUNTRY"/></td>
                <td><xsl:value-of select="COMPANY"/></td>
                <td><xsl:value-of select="PRICE"/></td>
                <td><xsl:value-of select="YEAR"/></td>
            </tr>
        </xsl:if>
            <xsl:if test="price &gt;=  10">
            <tr bgcolor="cyan">
                <td><xsl:value-of select="TITLE"/></td>
                <td><xsl:value-of select="ARTIST"/></td>
                <td><xsl:value-of select="COUNTRY"/></td>
                <td><xsl:value-of select="COMPANY"/></td>
                <td><xsl:value-of select="PRICE"/></td>
                <td><xsl:value-of select="YEAR"/></td>
            </tr>
        </xsl:if>
        </xsl:for-each>
            </table>

           </body>
       </html>
   </xsl:template>
</xsl:stylesheet>