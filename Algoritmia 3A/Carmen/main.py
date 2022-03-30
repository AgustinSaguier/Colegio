
#LA INTERPOL SE ENCUENTRA BUSCANDO
#LOS RASTROS DE CARMEN SAN DIEGO EN PARAGUAY
#LA ULTIMA PISTA QUE SE TIENE ES QUE LA MISMA
#SE ENCONTRABA EN EL DEPARTAMENTO DE GUAIRA,
#Y QUE SE PUDO HABER DESPLAZADO HACIA EL 
#DEPARTAMENTO DE CORDILLERA, CAAGUAZU, PARAGUARI
#O CAAZAPA.
#PARA ESTA BUSQUEDA SE DESEA UTILIZAR UN PROGRAMA
#DE COMPUTADORA. Y A PARTIR DE PISTAS QUE
#VAN ENTREGANDO LOS TESTIGOS, QUE NORMALMENTE SON
#DOS PISTAS NUMERICAS, QUE CORRESPONDEN A LA 
#DISTANCIA AL QUE SE DESPLAZO CARMEN SAN DIEGO 
#DESDE EL DEPARTAMENTO DE GUARIA,
#EL PROGRAMA DEBERÁ ARROJAR COMO RESULTADO
#UNA IMAGEN DEL MAPA DE DESPLAZAMIENTO Y EN QUE 
#DEPARTAMENTO SE ENCUENTRA CARMEN SANDIEGO.

from dibujos import *


print ("""
        Encuentre a Carmen San Diego en Paraguay
    ===============================================
PISTA:El último dato que se tiene de Carmen San Diego
      es que ha estado por el departamento de Guaira.
      Según el siguiente mapa, muestra el punto donde
      se lo ha visto la última vez.

------------------------------------------------------
                      1 2 3 4 5
        ╔══════════╤══════════╗
        ║          │          ║
        ║          │          ║
        ║  Caag    │   Cord   ║
        ║          │          ║
        ║          │          ║
        ║──────────☻──────────║
     -1 ║        Guaira       ║
     -2 ║          │          ║
     -3 ║ Parag    │   Caaza  ║
     -4 ║          │          ║
     -5 ║          │          ║
        ╚══════════╧══════════╝
        """)
print ("""
        Ayuda a Buscar a Carmen San Diego, Ingresando
        las coordenadas de avistamiento, coord1 Y coord2"
        """)


x=input("Empezando en Guaira, Carmen se desplazo hacia el Norte, Sur, Este o Oeste? ")
z=int(input("Cuantos kilometros se desplazo? "))

if z<100:
    print("Carmen sigue en Guaira")
else:


    if x == ("Norte"):
        y=str(input("Ahora, se dirigio hacia el Oeste o Este? "))
        w=int(input("Cuantos kilometros? "))
        if w<10:
            print("Carmen esta entre Coordillera y Caaguazu")
        else:
            if y == ("Oeste"):
                print(Caaguazu())
            elif y == ("Este"):
                print(Cordillera())


    elif x == ("Sur"):
        y=str(input("Ahora, se dirigio hacia el Oeste o Este? "))
        w=int(input("Cuantos kilometros? "))
        if w<10:
            print("Carmen esta entre Caazapa y Paraguari")
        else:
            if y == ("Oeste"):
                print(Paraguari())
            elif y == ("Este"):
                print(Caazapa())


    elif x == ("Oeste"):
        y=str(input("Ahora, se dirigio hacia el Norte o Sur? "))
        w=int(input("Cuantos kilometros? "))
        if w<10:
            print("Carmen esta entre Caaguazu y Paraguari")
        else:
            if y == ("Sur"):
                print(Paraguari())
            elif y == ("Norte"):
                print(Caaguazu())


    elif x == ("Este"):
        y=str(input("Ahora, se dirigio hacia el Norte o Sur? "))
        w=int(input("Cuantos kilometros? "))
        if w<10:
            print("Carmen esta entre Caazapa y Coordillera")
        else:
            if y == ("Sur"):
                 print(Caazapa())
            elif y == ("Norte"):
                print(Cordillera())

    

   
