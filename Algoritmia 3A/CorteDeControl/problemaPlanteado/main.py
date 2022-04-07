claveAnterior=0
claveActual=0
total=0
linea=[]
value=0
i=0
n=0

try:
    archivo=open("main.txt","r")
    linea=archivo.readline()
    lista=linea.split(",")

    val=lista[-1]
    val=int(val)
    while(val!=0):
        dec=val%10
        value=value+dec*pow(2,i)
        val=val//10
        i+=1
    claveActual=lista[0]
    claveAnterior=claveActual
    while (linea!=""): 
        if (claveAnterior==claveActual):
            total=total+int(value)      
            linea=archivo.readline()
            if linea=="":
                break
            lista=linea.split(",")
            val=lista[-1]
            val=int(val)
            value,n,i=0,0,0 
            while(val!=0 ):
                dec=val%10
                value=value+dec*pow(2,i)
                val=val//10
                i+=1
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