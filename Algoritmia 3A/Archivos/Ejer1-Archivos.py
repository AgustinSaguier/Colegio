contador=0

#creacion de txt
archivo = open ("datos.txt","w")
archivo.write("Hola")
archivo.write("\n") 
archivo.write("Hola")
archivo.write("\n") 
archivo.write("Hola")
archivo.write("\n") 
archivo.write("Hola")
archivo.write("\n") 
archivo.write("Hola")
archivo.close()


archivo = open ("datos.txt","r")
linea=archivo.readline()
while (linea!=""):
    contador+=1
    linea=archivo.readline()
    print(linea)
print(f"El archivo tiene {contador} lineas")
archivo.close()

