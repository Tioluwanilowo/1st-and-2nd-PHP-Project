import pandas as p
dict={"hello":1, "Bye":[2,3], "Welcome":3}
f=p.DataFrame(dict)
x=f["Hello"][1]
y=f["Bye"][1]+f["Welcome"][1]
z=x*y
print(z)