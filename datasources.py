import matplotlib.pyplot as plt
import pandas as pd

# Leer un archivo CSV en un DataFrame de Pandas
df = pd.read_csv('E:\\DAM\\Programación\\Segundo Trimestre\\hitos\\hito-grupal\\casasboston.csv')

# Crear un gráfico de barras
df.plot.bar()

# Agregar títulos y etiquetas
plt.title('Casas de Boston')
plt.xlabel('Casas')
plt.ylabel('Precio')

#Desactivar la cuadrícula y los bordes
plt.grid(False)
plt.box(False)

#Configurar tamaño y dpi del gráfico
plt.gcf().set_size_inches(10, 6)
plt.gcf().set_dpi(100)

# Guardar el gráfico como imagen
plt.savefig('E:\\DAM\\Programación\\Segundo Trimestre\\hitos\\hito-grupal\\casasboston.png')

# Mostrar el gráfico
plt.show()