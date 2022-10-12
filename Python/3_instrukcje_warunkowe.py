'''
x=input('podaj wartość: ')
if x=='10':
    print('Podałeś 10')
else:
    print('inna wartość niż 10')
print(type(x))

y=False
if y:
    print('prawda')
else:
    print('fałsz')
    '''

'''
    Zadanie:
          Użytkownik podaje wartośći trzech zmiennych: x,y,z.
         Wyświetl, która z tych trzech wartości jest największa
    
'''
x=input('Podaj wartość x: ')
y=input('Podaj wartość y: ')
z=input('Podaj wartość z: ')

if int(x)> int(y) and int(x)>int(z):
    print('Największa to x = ' + x)
elif int(y)> int(x) and int(y)>int(z):
     print('Największa to y = ' + y)
else:
    print('Największa to z = ' + z)