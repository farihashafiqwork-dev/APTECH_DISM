<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:msxsl="urn:schemas-microsoft-com:xslt" exclude-result-prefixes="msxsl"
>
    
    <xsl:template match="/">
      <html>

        <head>
          <h1  align="center" >
          <font color ="white">Books Data
        </font>

          </h1>
        </head>

        <body bgcolor ="maroon">

          <table border ="1" align ="center" cellspacing ="5" cellpadding ="5">

            <tr bgcolor ="pink" align ="center">
              <th>Title</th>
              <th>Author</th>
              <th>ISBN_No</th>
              <th>Price</th>
              <th>Edition</th>
              <th >PublishDate</th>
              <th>Bonus</th>
            </tr>
            <xsl:for-each select ="Books/Book">
               <xsl:if test="Price &gt; 1000">
                 <tr bgcolor ="cyan" align ="center">
                  <td>
                    <xsl:value-of select ="Title"/>
                  </td>
                  <td>
                    <xsl:value-of select ="Author"/>
                  </td>
                  <td>
                    <xsl:value-of select ="ISBN_No"/>
                  </td>
                  <td>
                    <xsl:value-of select ="Price"/>
                  </td>
                  <td>
                    <xsl:value-of select ="Edition"/>
                  </td>
                  <td>
                    <xsl:value-of select ="PublishDate"/>
                  </td>
                  <td>
                    <xsl:value-of select ="Price"/>
                  </td>
                </tr>
        </xsl:if> 
        <xsl:if test="Price &lt;= 1000">
          <tr bgcolor="lightgreen" align="center">
            <td>
              <xsl:value-of select="Title"/>
            </td>
            <td>
              <xsl:value-of select="Author"/>
            </td>
            <td>
              <xsl:value-of select="ISBN_No"/>
            </td>
            <td>
              <xsl:value-of select="Price"/>
            </td>
            <td>
              <xsl:value-of select="Edition"/>
            </td>
            <td>
              <xsl:value-of select="PublishDate"/>
            </td>
            <td>
              <xsl:value-of select ="Price"/>
            </td>
           
          </tr>
        </xsl:if>
            </xsl:for-each>
              
          </table>
        </body> 
      </html>        
    </xsl:template>
</xsl:stylesheet>
