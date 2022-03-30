#Se tienen almacenados en un archivo de texto
#los nombres y apellidos de los alumnos del 3er. curso
#junto con las notas en algunas materias.
#Escribir un programa que permita obtener el promedio de
#calificacion de cada alumno.
#El promedio debera ser almacenado en otro archivo .txt

with open("notas.txt") as file, open ("promedio.txt","w") as promedio:
    for record in file:
        record=record.strip()
        if record:
            values=record.split(",")
            if values[0]!= "Apellidos":
                promedio.write("----------Alumno/a: "+values[0]+"--------------")
                promedio.write('\n')
                promedio.write('Su promedio es de '+str((int(values[1])+int(values[2])+int(values[3])+int(values[4])+int(values[5])+int(values[6]))/6))
                promedio.write('\n')