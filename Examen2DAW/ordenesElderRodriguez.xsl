<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="compras.css"/>
    </head>
  <body>
    <table border="1">
      <caption><h2>Compras</h2></caption> 
      <tr id="header">
        <th>ID</th>
        <th>Nombre</th>
        <th>Saldo</th>
        <th>Fecha</th>
      </tr>
      <xsl:for-each select="compras/orden">
      <xsl:sort select="fecha"/>
      <tr  id="tabledata">
        <td><xsl:value-of select="@id"/></td>
        <td><xsl:value-of select="nombreCliente/nombre"/></td>
        <td>$<xsl:value-of select="saldo"/></td>
        <td><xsl:value-of select="fecha"/></td>

      </tr>

      </xsl:for-each>
      <tr  id="tabledata">
        <td colspan="2">Total saldo: </td>
        <td>$<xsl:value-of select="sum(compras/orden/saldo)"/></td>
      </tr>
    </table>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>
