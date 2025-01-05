<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Error 404 - Page Not Found</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        text-align: center;
                        padding: 50px;
                    }
                    h1 {
                        color: red;
                        font-size: 48px;
                    }
                    p {
                        font-size: 18px;
                        color: #555;
                    }
                    a {
                        font-size: 16px;
                        color: #007BFF;
                        text-decoration: none;
                    }
                    a:hover {
                        text-decoration: underline;
                    }
                </style>
            </head>
            <body>
                <h1>Error <xsl:value-of select="error/code"/></h1>
                <p><xsl:value-of select="error/message"/></p>
                <p><xsl:value-of select="error/description"/></p>
                <a href="{error/link}">Go Back to Home</a>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
