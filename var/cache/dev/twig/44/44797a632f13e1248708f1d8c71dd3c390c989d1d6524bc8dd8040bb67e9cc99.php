<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* products/product.html.twig */
class __TwigTemplate_f5ca431f6ff7bbdc137485f81947892782f7d0eb789034d1df9ab00ceea0a48d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Musteroid Inventory";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <head>
    <title>Musteroid</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"css/bootstrap/bootstrap.min.css\">
    <link rel=\"icon\" href=\"img/muszoid-removebg-preview1.png\">
  </head>
  <body>
    <div>
       <nav class=\"navbar navbar-expand-lg navbar-light py-4\">
        <div class=\"container\"><a class=\"navbar-brand\" href=\"#\"><img class=\"img-fluid\" src=\"img/muszoid-removebg-preview.png\" alt=\"\" width=\"120px\"></a>
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#nav08\" aria-controls=\"nav08\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
          <div class=\"collapse navbar-collapse\" id=\"nav08\">
            <ul class=\"d-none d-lg-flex navbar-nav mx-auto mt-3 mt-lg-0 mb-3 mb-lg-0 position-absolute top-50 start-50 translate-middle\">
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory\">Home</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../products\">Inventory</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory/contact\">About Us</a></li>
            </ul>
            <ul class=\"navbar-nav mt-3 mt-lg-0 mb-3 mb-lg-0 d-lg-none\">
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory\">Home</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../products\">Inventory</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory/contact\">About Us</a></li>
            </ul>
            <div class=\"ms-lg-auto\">";
        // line 32
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), null))) {
            // line 33
            echo "                    <a class=\"nav-link\" href=\"/";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) ? ("logout") : ("login"));
            echo "\" @click=\"isOpen = false\"><button class=\"btn btn-primary me-2\"> ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) ? ("Logout") : ("Login"));
            echo " </button></a>
                    ";
        } else {
            // line 35
            echo "                    <a class=\"nav-link\" href=\"/";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) ? ("logout") : ("login"));
            echo "\" @click=\"isOpen = false\"><button class=\"btn btn-danger me-2\"> ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) ? ("Logout") : ("Login"));
            echo " </button></a>
                    ";
        }
        // line 37
        echo "            </div>
          </div>
        </div>
      </nav>
    </div>
    ";
        // line 42
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), null))) {
            // line 43
            echo "        <h2 class=\"text-center\">You haven't logged in yet</h2>
        <img src=\"img/nodata.jpg\" class=\"rounded mx-auto d-block\" style=\"width: 50%; height:50%;\">
    ";
        } else {
            // line 46
            echo "    <section>
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-md-6 text-center mb-4\">
            <h3 class=\"heading-section\">Products Inventory</h3>
            <a href=\"../products\" class=\"btn btn-danger\">Go back</a>
            <a class=\"btn btn-primary\" href='album/new'>Insert new product</a>
            <a class=\"btn btn-outline-primary\" href=\"\">Switch to other folder</a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"table table-wrap table-striped\">
              <table class=\"table align-middle mb-0 bg-white table-hover\">
                <thead class=\"bg-light\">
                  <tr>
                    <th class=\"header\" scope=\"col\">Name</th>
                    <th class=\"header\" scope=\"col\">Artist</th>
                    <th class=\"header\" scope=\"col\">Price</th>
                    <th class=\"header\" scope=\"col\">Quantity</th>
                    <th class=\"header\" scope=\"col\">&nbsp;</th>
                    <th class=\"header\" scope=\"col\">&nbsp;</th>
                    <th class=\"header\" scope=\"col\">&nbsp;</th>
                  </tr>
                </thead>
                  <!-- Product template -->
                     ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
                // line 73
                echo "              <tr>
                <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "name", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
                <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "Artist", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "Price", [], "any", false, false, false, 76), "html", null, true);
                echo "</td>
                 <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "Quantity", [], "any", false, false, false, 77), "html", null, true);
                echo "</td>
                <td>
                <a class=\"btn btn-primary\" href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("album_show", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\">Show Details</a>
                </td>
                 <td>
                      <a type=\"button\" class=\"btn btn-outline-primary\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("album_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\">Edit</a>
                    </td>
                     <td>
                      <a type=\"button\" class=\"btn btn-danger\"  href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("album_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\">Delete</a>
                    </td>
                  
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "           ";
            // line 92
            echo "              </table>
            </div>
          </div>
        </div>
      </div>
\t  </section>
  ";
        }
        // line 99
        echo "  
    <script src=\"js/bootstrap/bootstrap.bundle.min.js\"></script>
  </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 99,  225 => 92,  223 => 90,  212 => 85,  206 => 82,  200 => 79,  195 => 77,  191 => 76,  187 => 75,  183 => 74,  180 => 73,  176 => 72,  148 => 46,  143 => 43,  141 => 42,  134 => 37,  126 => 35,  118 => 33,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Musteroid Inventory{% endblock %}

{% block body %}
  <head>
    <title>Musteroid</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"css/bootstrap/bootstrap.min.css\">
    <link rel=\"icon\" href=\"img/muszoid-removebg-preview1.png\">
  </head>
  <body>
    <div>
       <nav class=\"navbar navbar-expand-lg navbar-light py-4\">
        <div class=\"container\"><a class=\"navbar-brand\" href=\"#\"><img class=\"img-fluid\" src=\"img/muszoid-removebg-preview.png\" alt=\"\" width=\"120px\"></a>
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#nav08\" aria-controls=\"nav08\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
          <div class=\"collapse navbar-collapse\" id=\"nav08\">
            <ul class=\"d-none d-lg-flex navbar-nav mx-auto mt-3 mt-lg-0 mb-3 mb-lg-0 position-absolute top-50 start-50 translate-middle\">
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory\">Home</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../products\">Inventory</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory/contact\">About Us</a></li>
            </ul>
            <ul class=\"navbar-nav mt-3 mt-lg-0 mb-3 mb-lg-0 d-lg-none\">
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory\">Home</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../products\">Inventory</a></li>
              <li class=\"nav-item me-4\"><a class=\"nav-link\" href=\"../inventory/contact\">About Us</a></li>
            </ul>
            <div class=\"ms-lg-auto\">{% if app.user == null %}
                    <a class=\"nav-link\" href=\"/{{app.user ? 'logout' : 'login'}}\" @click=\"isOpen = false\"><button class=\"btn btn-primary me-2\"> {{ app.user ? 'Logout' : 'Login' }} </button></a>
                    {% else %}
                    <a class=\"nav-link\" href=\"/{{app.user ? 'logout' : 'login'}}\" @click=\"isOpen = false\"><button class=\"btn btn-danger me-2\"> {{ app.user ? 'Logout' : 'Login' }} </button></a>
                    {% endif %}
            </div>
          </div>
        </div>
      </nav>
    </div>
    {% if app.user == null %}
        <h2 class=\"text-center\">You haven't logged in yet</h2>
        <img src=\"img/nodata.jpg\" class=\"rounded mx-auto d-block\" style=\"width: 50%; height:50%;\">
    {% else %}
    <section>
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-md-6 text-center mb-4\">
            <h3 class=\"heading-section\">Products Inventory</h3>
            <a href=\"../products\" class=\"btn btn-danger\">Go back</a>
            <a class=\"btn btn-primary\" href='album/new'>Insert new product</a>
            <a class=\"btn btn-outline-primary\" href=\"\">Switch to other folder</a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"table table-wrap table-striped\">
              <table class=\"table align-middle mb-0 bg-white table-hover\">
                <thead class=\"bg-light\">
                  <tr>
                    <th class=\"header\" scope=\"col\">Name</th>
                    <th class=\"header\" scope=\"col\">Artist</th>
                    <th class=\"header\" scope=\"col\">Price</th>
                    <th class=\"header\" scope=\"col\">Quantity</th>
                    <th class=\"header\" scope=\"col\">&nbsp;</th>
                    <th class=\"header\" scope=\"col\">&nbsp;</th>
                    <th class=\"header\" scope=\"col\">&nbsp;</th>
                  </tr>
                </thead>
                  <!-- Product template -->
                     {% for album in albums %}
              <tr>
                <td>{{ album.name }}</td>
                <td>{{ album.Artist }}</td>
                <td>{{ album.Price }}</td>
                 <td>{{ album.Quantity}}</td>
                <td>
                <a class=\"btn btn-primary\" href=\"{{ path('album_show', { 'id': album.id }) }}\">Show Details</a>
                </td>
                 <td>
                      <a type=\"button\" class=\"btn btn-outline-primary\" href=\"{{ path('album_edit', { 'id': album.id }) }}\">Edit</a>
                    </td>
                     <td>
                      <a type=\"button\" class=\"btn btn-danger\"  href=\"{{ path('album_delete', { 'id': album.id }) }}\">Delete</a>
                    </td>
                  
            </tr>
          {% endfor %}
           {# <tbody>
                </tbody> #}
              </table>
            </div>
          </div>
        </div>
      </div>
\t  </section>
  {% endif %}
  
    <script src=\"js/bootstrap/bootstrap.bundle.min.js\"></script>
  </body>
</html>
{% endblock %}
", "products/product.html.twig", "C:\\Users\\my_pc\\AssignmentWEBG301-BranchKhanh\\templates\\products\\product.html.twig");
    }
}
