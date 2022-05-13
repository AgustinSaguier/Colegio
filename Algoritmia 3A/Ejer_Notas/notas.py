#Se tienen almacenados en un archivo de texto
#los nombres y apellidos de los alumnos del 3er. curso
#junto con las notas en algunas materias.
#Escribir un programa que permita obtener el promedio de
#calificacion de cada alumno.
#El promedio debera ser almacenado en otro archivo .txt
prom=0
with open("notas.txt") as file, open ("promedio.txt","w") as promedio:
    for record in file:
        record=record.strip()
        if record:
            values=record.split(",")
            if values[0]!= "Apellidos":
                promedio.write("----------Alumno/a: "+values[0]+"--------------")
                promedio.write('\n')
                prom=0
                for k in range (len(values)):
                    if (k!=0):
                        prom=prom+int(values[k])
                num=len(values)-1
                newProm=prom/num
                promedio.write('Su promedio es de '+str(newProm))
                promedio.write('\n')
                
                   


