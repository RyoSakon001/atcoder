# ビットAND
a = 0b1101
b = 0b1010
result = a & b
print(bin(result))  # 出力: 0b1000

# ビットOR
a = 0b1101
b = 0b1010
result = a | b
print(bin(result))  # 出力: 0b1111

# ビットXOR
a = 0b1101
b = 0b1010
result = a ^ b
print(bin(result))  # 出力: 0b0111

# ビット反転
a = 0b1101
result = ~a
print(bin(result))  # 出力: -0b1110 (2の補数表現)

# 左シフト
a = 0b1101
result = a << 2
print(bin(result))  # 出力: 0b110100

# 右シフト
a = 0b1101
result = a >> 2
print(bin(result))  # 出力: 0b11
