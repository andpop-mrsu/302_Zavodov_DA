import Fraction from '../src/Fraction'

test('toString', () => {
    expect(new Fraction(7, 2).toString()).toBe('3\'1/2')
})

test('getNumer', () => {
    expect(new Fraction(1, 2).getNumer()).toBe(1)
})

test('getDenom', () => {
    expect(new Fraction(1, 2).getDenom()).toBe(2)
})

test('add', () => {
    const frac1 = new Fraction(-1, 2)
    const frac2 = new Fraction(5, 8)
    expect(frac1.add(frac2).toString()).toBe('1/8')
})

test('sub', () => {
    const frac1 = new Fraction(4, 5)
    const frac2 = new Fraction(2, 5)
    expect(frac1.sub(frac2).toString()).toBe('2/5')
})