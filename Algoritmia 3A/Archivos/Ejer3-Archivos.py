import os
tag=0
mayor="<"
menor=">"

if (os.path.exists ("error.txt")):
    error=open ("error.txt","r")
    corregido=open("corregido.txt","w")
#seguir

    for tag in error:
        new=tag.rstrip()
        new=new+menor
        new=mayor+new
        corregido.write (new)
        corregido.write ("\n")
    error.close
    corregido.close
else:
    print("no existe el archivo")



