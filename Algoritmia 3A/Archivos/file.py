
from tkinter import N


name=""
mat1=""
mat2=""
mat3=""
name=input("Ingrese nombre:")
mat1=(int(input("Calificacion 1:")))
mat2=(int(input("Calificacion 2:")))
mat3=(int(input("Calificacion 3:")))
#print (f"{name} Sus calificaciones son:{mat1}, {mat2}, {mat3}")

file = open ("notas.txt","w")
file.write("Nombre")
file.write("\t")
file.write("mat1")
file.write("\t")
file.write("mat2")
file.write("\t")
file.write("mat3")
file.write("\n")
file.write(name)
file.write("\t")
file.write("\t")
file.write(str (mat1))
file.write("\t")
file.write("\t")
file.write(str (mat2))
file.write("\t")
file.write("\t")
file.write(str (mat3))
file.close()



