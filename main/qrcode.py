import qrcode
img = qrcode.make('Lien du site ') 
img.save('myQRcode.png') 
img.show()