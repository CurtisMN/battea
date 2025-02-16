import { Head } from '@inertiajs/react';

interface Tea {
  id: number;
  name: string;
}

const Teas = ({ teas }: { teas: Tea[] }) => (
  <>
    <Head title="Teas" />
    <div className="py-12">
      <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
          <div className="p-6 text-gray-900 dark:text-gray-100">
            <h1 className="text-2xl font-semibold">Teas</h1>
            {teas.map((tea) => (
              <div key={tea.id}>
                <h2>{tea.name}</h2>
              </div>
            ))}
          </div>
        </div>
      </div>
    </div>
  </>
);

export default Teas;
