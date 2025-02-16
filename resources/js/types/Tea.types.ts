export interface Tea {
    id: number;
    name: string;
    user_id: number;
    tea_type_id: number | null;
    vendor: string | null;
    url: string | null;
    description: string | null;
    price: number;
    weight_grams: number;
    year: number | null;
    production_batch: string | null;
    packaging_type: string | null;
    region_of_origin: string | null;
    tasting_notes: string | null;
    aging_potential: string | null;
    recommended_brewing_temp_celsius: number | null;
    recommended_steeping_time_seconds: number | null;
    recommended_grams_per_100ml: number | null;
    production_date: string | null;
    purchase_date: string | null;
    storage_notes: string | null;
    rating: number | null;
    personal_notes: string | null;
    created_at: string;
    updated_at: string;
    deleted_at: string | null;
}
