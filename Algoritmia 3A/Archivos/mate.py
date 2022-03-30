exp=""
l2=[]
print (l2)
#cantOper=0
op1=0
op2=0
r=0
k=0
file=open ("mate.txt","r")
for exp in file:
    if (exp[0]!="E"):
        exp=exp+"F"
        l2=list(exp)
        while (l2[k]!="F"):
            if (l2[k]=="+"):
                op1=int (l2[k-1])
            op2=int (l2[k+1])
            r=op1+op2
            l2.pop(k-1)
            l2.pop(k-1)
            l2[k-1]=r
            k=k-1
            if (l2[k]=="-"):
                op1=int (l2[k-1])
                op2=int (l2[k+1])
                r=op1-op2
                l2.pop(k-1)
                l2.pop(k-1)
                l2[k-1]=r
                k=k-1
                
            if (len(l2)==1):
                break
            k=k+1
    else:
        print (exp)
    print (l2[:-1])  

        
        
        
        
    
