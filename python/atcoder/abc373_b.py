def count_moves(s):
    positions = {}
    for i, l in enumerate(s):
        positions[l] = i
    ls_in_order = [l for l in 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' if l in positions]
    positions_in_order = [positions[l] for l in ls_in_order]
    total_moves = sum(abs(positions_in_order[i+1] - positions_in_order[i]) for i in range(len(positions_in_order)-1))
    return total_moves

s = list(input())

print(count_moves(s))


