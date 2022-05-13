import createFraction from '../src/Fraction'

test('toString', () => {
    expect(createFraction(7, 2).toString()).toBe('3\'1/2')
})

test('getNumer', () => {
    expect(createFraction(1, 2).getNumer()).toBe(1)
})

test('getDenom', () => {
    expect(createFraction(1, 2).getDenom()).toBe(2)
})

test('add', () => {
    const frac1 = createFraction(1, 6)
    const frac2 = createFraction(1, 3)
    expect(frac1.add(frac2).toString()).toBe('1/2')
})

test('sub', () => {
    const frac1 = createFraction(8, 5)
    const frac2 = createFraction(2, 5)
    expect(frac1.sub(frac2).toString()).toBe('1\'1/5')
})