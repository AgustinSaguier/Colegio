#Corte de Control
#BEGIN
# ASSIGN (ArchEmpleados,’C:\EMPLEADO.DAT’);
# RESET (ArchEmpleados);
# LeerRegistro (ArchEmpleados, RegEmpleado, Fin);
# WHILE NOT(Fin) DO
# BEGIN
# CategoriaAnt := RegEmpleado.Categoria;
# WRITE (Lst, CategoriaAnt);
# WHILE ((NOT(Fin)) AND (CategoriaAnt = RegEmpleado.Categoria)) DO
# BEGIN
# WRITE (Lst, RegEmpleado.Nombre);
# LeerRegistro (ArchEmpleados, RegEmpleado, Fin)
# END
# END
#END.


claveAnterior=0
claveActual=0
total=0
linea=[]

def corte():
    global claveAnterior
    global total
    print (claveAnterior, "Total: ", total)
    total=0

def calcula():
    global valor
    global claveActual
    val=lista[-1]
    valor=val
    claveActual=lista[0]

def splitLine():
    global lista
    global linea
    linea=archivo.readline()
    lista=linea.split(",")
    
    


try:
    archivo=open("main.txt","r")
    splitLine()

    calcula()
    claveAnterior=claveActual
    while (linea!=""): 
        #lista=lista[:-1]
        if (claveAnterior==claveActual):
            total=total+int(valor)         
            splitLine()
            calcula()
        else:
           corte()
           claveAnterior=claveActual  
    
    corte()
    claveAnterior=claveActual       
except IOError:
    print ("Error")