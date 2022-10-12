'''
print("test")
text="Anna, paweł, Jan"
print(type(text))
tab=text.split(',')
print(tab)
print(type(tab))
name1=tab[1]
print(name1)

nameUpper=name1.upper()
print(nameUpper)
nameLower=name1.lower()
print(nameLower)



# sprawdzanie zawartośći
surname=input()
content=surname.isalpha()
print(content)
'''
#białe znaki


'''

print("Jan\nKowalski")
text1="Jan\n"
text2="Kowalski"
print(text1 + text2)
text1=text1.rstrip()
print(text1 + " " + text2)
print(f'{text1} {text2}')

text="%s, Java %s" % ("PHP", "Python")
print(text)
text='{1}, Java i {0}'.format("PHP","Python")
print(text)
#help(text.replace)
new=text.replace("PHP","Pyta Eryka")
print(new)
print('test1', end='')
print('test2')

'''

year=2022
month=10
day=12
print(day, month, year, sep='')
