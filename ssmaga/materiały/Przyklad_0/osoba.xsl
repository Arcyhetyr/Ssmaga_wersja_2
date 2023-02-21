<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="osoba">
<HTML><BODY><H1>Baza Studentów</H1>
<TABLE><TR><TH>Numer album</TH><TH>Imie</TH>
<TH>Nazwisko</TH><TH>Punkty</TH> </TR>
  <xsl:for-each select="student">
  <xsl:sort select="punkty" data-type="number" order="descending"/>
    <TR>
    <xsl:attribute name="BGCOLOR">
    <xsl:choose>
    <xsl:when test="punkty >= '16'">yellow</xsl:when>
    <xsl:when test="punkty &lt; '16'">pink</xsl:when>
    <xsl:when test="punkty = ''">aqua</xsl:when>
    </xsl:choose>
    </xsl:attribute>
      <TD><xsl:value-of select="nr"/></TD> 
      <TD><B><xsl:value-of select="imie"/></B></TD>  
      <TD><B><xsl:value-of select="nazwisko"/></B></TD> 
      <TD><I><xsl:value-of select="punkty"/></I></TD>
    </TR>
  </xsl:for-each>
</TABLE>
</BODY></HTML>
</xsl:template>
</xsl:stylesheet>