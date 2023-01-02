fn main() {
    let pi = 3.14159;

    use std::io::{stdin};
    let mut entrada = String::new();
    
    stdin().read_line(&mut entrada).expect("");
    let raio: f64 = entrada.trim().parse().expect("Not numeric");

    let area = pi * raio * raio;

    println!("A={:.4}", area);
}
