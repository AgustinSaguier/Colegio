val=int(input("Eliga un numero "))

value=0
i=0
n=0
while(val!=0):
    dec=val%10
    value=value+dec*pow(2,i)
    val=val//10
    i+=1
print(value)
