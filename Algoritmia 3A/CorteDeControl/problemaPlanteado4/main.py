
with open("main.txt") as file:
        record=file.readline()
        record=record.strip()
        values=record.split(",")
        claveActual=values[0]
        claveAnterior=claveActual
        while (record!=""):
            if claveAnterior==claveActual:
                record=file.readline()
                record=record.strip()
                values=record.split(",")
                claveActual=values[0]
                if (record == ""):
                    break
            else:
                #print("La clave " + claveAnterior + " aparece "+ str(contador)+" veces con un valor de " + str(sumaTotal))
                claveAnterior=claveActual
#print("La clave " + claveAnterior + " aparece "+ str(contador)+" veces con un valor de " + str(sumaTotal))