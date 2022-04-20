contador=0
sumaTotal=0

with open("test.txt") as file:
        record=file.readline()
        record=record.strip()
        values=record.split(",")
        claveActual=values[0]
        suma=int(values[1])
        claveAnterior=claveActual
        while (record!=""):
            if claveAnterior==claveActual:
                contador=contador+1
                sumaTotal=sumaTotal+suma
                record=file.readline()
                record=record.strip()
                values=record.split(",")
                claveActual=values[0]
                if (record == ""):
                    break
                suma=int(values[1])
            else:
                print("La clave " + claveAnterior + " aparece "+ str(contador)+" veces con un valor de " + str(sumaTotal))
                contador=0
                sumaTotal=0
                claveAnterior=claveActual
print("La clave " + claveAnterior + " aparece "+ str(contador)+" veces con un valor de " + str(sumaTotal))