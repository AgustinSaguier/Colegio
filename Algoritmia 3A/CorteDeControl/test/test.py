contador=0


with open("test.txt") as file:
        record=file.readline()
        record=record.strip()
        values=record.split(",")
        claveActual=values[0]
        claveAnterior=claveActual
        while (record!=""):
            if claveAnterior==claveActual:
                contador=contador+1
                record=file.readline()
                record=record.strip()
                values=record.split(",")
                claveActual=values[0]
            else:
                print("La clave " + claveAnterior + " aparece "+ str(contador)+" veces")
                contador=0
                claveAnterior=claveActual