claveAnterior=0
claveActual=0
total=0
linea=[]


try:
    archivo=open("main.txt","r")
    linea=archivo.readline()
    lista=linea.split(",")

    val=lista[-1]
    valor=int(val, 2)
    claveActual=lista[0]
    claveAnterior=claveActual
    while (linea!=""): 
        #lista=lista[:-1]
        if (claveAnterior==claveActual):
            total=total+int(valor)         
            linea=archivo.readline()
            lista=linea.split(",")
            val=lista[-1]
            valor=int(val,2)
            claveActual=lista[0]
        else:
           print (claveAnterior, "Total: ", total)
           total=0
           claveAnterior=claveActual  
    
    print (claveAnterior, "Total: ", total)
    total=0
    claveAnterior=claveActual       
except IOError:
    print ("Error")