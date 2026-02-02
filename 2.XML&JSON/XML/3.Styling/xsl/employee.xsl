<?xml version="1.0" encoding="utf-8"?><!-- DWXMLSource="XMLxslt.xml" -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
      <html>

        <h1>Employee Details </h1>

        <table border ="1" bgcolor ="red" align="center">
          <tr>
	   <th>Employee No</th>
           <th>Employee Name</th>
           <th>Designation</th>
            <th>Salary</th>           
          </tr> 
          <xsl:for-each select ="E/Employee">
            <xsl:choose>
              <xsl:when test ="sal &lt; 30000">
          <tr bgcolor ="yellow">
            <td>
              <xsl:value-of select ="Empno"/>
            </td>
	     <td>
              <xsl:value-of select ="EName"/>
            </td>
            <td>
              <xsl:value-of select ="Designation"/>
            </td>
            <td>
              <xsl:value-of select ="sal" />
            </td>
          </tr>
              </xsl:when>
              <xsl:otherwise>
                <tr bgcolor ="pink">
                  <td>
                    <xsl:value-of select ="Empno"/>
                  </td>
		  <td>
                    <xsl:value-of select ="EName"/>
                  </td>
                  <td>
                    <xsl:value-of select ="Designation"/>
                  </td>
                  <td>
                    <xsl:value-of select ="sal" />
                  </td>
                </tr>
              </xsl:otherwise>
            </xsl:choose>
          </xsl:for-each>
        </table>

      </html>
    </xsl:template>
</xsl:stylesheet>
