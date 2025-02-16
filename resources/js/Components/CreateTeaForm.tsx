import { Tea } from '@/types/Tea.types';
import axios from 'axios';
import { useState } from 'react';

export const CreateTeaForm = () => {
    const [formData, setFormData] = useState<Partial<Tea>>({
        name: '',
        vendor: '',
        url: '',
        description: '',
        price: 0,
        weight_grams: 0,
        year: null,
        production_batch: '',
        packaging_type: '',
        region_of_origin: '',
        tasting_notes: '',
        aging_potential: '',
        recommended_brewing_temp_celsius: null,
        recommended_steeping_time_seconds: null,
        recommended_grams_per_100ml: null,
        production_date: null,
        purchase_date: null,
        storage_notes: '',
        rating: null,
        personal_notes: '',
    });

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        axios.post('/teas', formData);
    };

    const handleChange = (
        e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>,
    ) => {
        const { name, value, type } = e.target;
        let processedValue: string | number | null = value;

        if (type === 'number') {
            processedValue = value === '' ? null : Number(value);
        }

        setFormData((prev) => ({
            ...prev,
            [name]: processedValue,
        }));
    };

    return (
        <div className="mx-auto max-w-2xl p-4">
            <h1 className="mb-4 text-2xl font-bold text-black">Create Tea</h1>
            <form onSubmit={handleSubmit} className="space-y-4">
                <div>
                    <label
                        htmlFor="name"
                        className="block text-sm font-medium text-black"
                    >
                        Name *
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value={formData.name}
                        onChange={handleChange}
                        required
                        className="mt-1 block w-full rounded-md border-gray-300 text-black shadow-sm"
                    />
                </div>

                <div>
                    <label
                        htmlFor="vendor"
                        className="block text-sm font-medium text-black"
                    >
                        Vendor
                    </label>
                    <input
                        type="text"
                        id="vendor"
                        name="vendor"
                        value={formData.vendor ?? ''}
                        onChange={handleChange}
                        className="mt-1 block w-full rounded-md border-gray-300 text-black shadow-sm"
                    />
                </div>

                <div>
                    <label
                        htmlFor="price"
                        className="block text-sm font-medium text-black"
                    >
                        Price *
                    </label>
                    <input
                        type="number"
                        id="price"
                        name="price"
                        value={formData.price}
                        onChange={handleChange}
                        required
                        min="0"
                        step="0.01"
                        className="mt-1 block w-full rounded-md border-gray-300 text-black shadow-sm"
                    />
                </div>

                <div>
                    <label
                        htmlFor="weight_grams"
                        className="block text-sm font-medium text-black"
                    >
                        Weight (grams) *
                    </label>
                    <input
                        type="number"
                        id="weight_grams"
                        name="weight_grams"
                        value={formData.weight_grams}
                        onChange={handleChange}
                        required
                        min="0"
                        className="mt-1 block w-full rounded-md border-gray-300 text-black shadow-sm"
                    />
                </div>

                <div>
                    <label
                        htmlFor="description"
                        className="block text-sm font-medium text-black"
                    >
                        Description
                    </label>
                    <textarea
                        id="description"
                        name="description"
                        value={formData.description ?? ''}
                        onChange={handleChange}
                        rows={3}
                        className="mt-1 block w-full rounded-md border-gray-300 text-black shadow-sm"
                    />
                </div>

                <button
                    type="submit"
                    className="rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
                >
                    Create Tea
                </button>
            </form>
        </div>
    );
};
