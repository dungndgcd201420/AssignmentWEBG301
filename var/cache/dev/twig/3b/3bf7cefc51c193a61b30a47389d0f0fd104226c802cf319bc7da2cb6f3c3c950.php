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

/* products/shirt_show.html.twig */
class __TwigTemplate_6ace270da4362c07b384c7e41ceb23ac8399581ce4b6cbc8c15b0441e414fbd1 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/shirt_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/shirt_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/shirt_show.html.twig", 1);
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

        echo "Musteroid Display";
        
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

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "  </head>

  

  <body>
    <div>
       <nav class=\"navbar navbar-expand-lg navbar-light py-4\">
        <div class=\"container\">
          <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shirt_index");
        echo "\" class=\"btn btn-outline-danger\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box-arrow-in-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z\"/>
            <path fill-rule=\"evenodd\" d=\"M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z\"/>
          </svg>   Back to the list</a>
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
        // line 54
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), null))) {
            // line 55
            echo "              <a class=\"nav-link\" href=\"/";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) ? ("logout") : ("login"));
            echo "\" @click=\"isOpen = false\"><button class=\"btn btn-primary me-2\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
                <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
              </svg>   ";
            // line 57
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) ? ("Logout") : ("Login"));
            echo " </button></a>
              ";
        } else {
            // line 59
            echo "              <a class=\"nav-link\" href=\"/";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) ? ("logout") : ("login"));
            echo "\" @click=\"isOpen = false\"><button class=\"btn btn-danger me-2\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
                <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
              </svg>   ";
            // line 61
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) ? ("Logout") : ("Login"));
            echo " </button></a>
              ";
        }
        // line 63
        echo "            </div>
          </div>
        </div>
      </nav>

      <div class=\"displayprod\">
        <div class=\"card border-primary mb-3\" style=\"max-width: 40rem;\">
          <div class=\"card-header display-6\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-file-person-fill\" viewBox=\"0 0 16 16\">
            <path d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z\"/>
          </svg>   Shirt</div>
          <div class=\"card-body text-primary\">
            <h3 class=\"card-title d-inline display-4\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 74, $this->source); })()), "Name", [], "any", false, false, false, 74), "html", null, true);
        echo "       </h5> <small class=\"text-muted d-inline\">from ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 74, $this->source); })()), "Brand", [], "any", false, false, false, 74), "html", null, true);
        echo "</small>
              <br>
            <p class=\"card-text\" style=\"color: black;\"><strong>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 76, $this->source); })()), "Color", [], "any", false, false, false, 76), "html", null, true);
        echo "               <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 76, $this->source); })()), "Color", [], "any", false, false, false, 76), "html", null, true);
        echo "\" class=\"bi bi-square-fill\" viewBox=\"0 0 16 16\">
              <path d=\"M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z\"/>
            </svg></strong></p>
            <p class=\"card-text\">Size ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 79, $this->source); })()), "Size", [], "any", false, false, false, 79), "html", null, true);
        echo "</p>
            <p class=\"card-text\"><strong>\$";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 80, $this->source); })()), "Price", [], "any", false, false, false, 80), "html", null, true);
        echo "</strong></p>
            <p class=\"card-text lead\">In stock: ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 81, $this->source); })()), "Quantity", [], "any", false, false, false, 81), "html", null, true);
        echo "</p>
          </div>
        </div>
      </div>

    </body>
      


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "
        <style>
          .displayprod {
            top: 40%;
            left: 50%;
            padding: 30px;
            transform: translate(-50%, -50%);
            position: absolute;
          }
        
        </style>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/shirt_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 17,  212 => 16,  192 => 81,  188 => 80,  184 => 79,  176 => 76,  169 => 74,  156 => 63,  151 => 61,  145 => 59,  140 => 57,  134 => 55,  132 => 54,  113 => 38,  103 => 30,  101 => 16,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Musteroid Display{% endblock %}

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

    {% block stylesheets %}

        <style>
          .displayprod {
            top: 40%;
            left: 50%;
            padding: 30px;
            transform: translate(-50%, -50%);
            position: absolute;
          }
        
        </style>

    {% endblock %}
  </head>

  

  <body>
    <div>
       <nav class=\"navbar navbar-expand-lg navbar-light py-4\">
        <div class=\"container\">
          <a href=\"{{ path('shirt_index') }}\" class=\"btn btn-outline-danger\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box-arrow-in-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z\"/>
            <path fill-rule=\"evenodd\" d=\"M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z\"/>
          </svg>   Back to the list</a>
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
              <a class=\"nav-link\" href=\"/{{app.user ? 'logout' : 'login'}}\" @click=\"isOpen = false\"><button class=\"btn btn-primary me-2\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
                <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
              </svg>   {{ app.user ? 'Logout' : 'Login' }} </button></a>
              {% else %}
              <a class=\"nav-link\" href=\"/{{app.user ? 'logout' : 'login'}}\" @click=\"isOpen = false\"><button class=\"btn btn-danger me-2\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
                <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
              </svg>   {{ app.user ? 'Logout' : 'Login' }} </button></a>
              {% endif %}
            </div>
          </div>
        </div>
      </nav>

      <div class=\"displayprod\">
        <div class=\"card border-primary mb-3\" style=\"max-width: 40rem;\">
          <div class=\"card-header display-6\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-file-person-fill\" viewBox=\"0 0 16 16\">
            <path d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z\"/>
          </svg>   Shirt</div>
          <div class=\"card-body text-primary\">
            <h3 class=\"card-title d-inline display-4\">{{shirt.Name}}       </h5> <small class=\"text-muted d-inline\">from {{shirt.Brand}}</small>
              <br>
            <p class=\"card-text\" style=\"color: black;\"><strong>{{shirt.Color}}               <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"{{shirt.Color}}\" class=\"bi bi-square-fill\" viewBox=\"0 0 16 16\">
              <path d=\"M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z\"/>
            </svg></strong></p>
            <p class=\"card-text\">Size {{shirt.Size}}</p>
            <p class=\"card-text\"><strong>\${{shirt.Price}}</strong></p>
            <p class=\"card-text lead\">In stock: {{shirt.Quantity}}</p>
          </div>
        </div>
      </div>

    </body>
      


{% endblock %}", "products/shirt_show.html.twig", "C:\\Users\\klysm\\AssignmentWEBG301\\templates\\products\\shirt_show.html.twig");
    }
}
