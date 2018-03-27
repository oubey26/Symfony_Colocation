<?php

/* base.html.twig */
class __TwigTemplate_986d2949f7bd9927cf38211370e2fcd12fea623a9b34823dcc044f95341a0615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d22b8cf3f9a8fc1bee5c39a22230a9e18a42fc9318dfe838cbcc5981e9abbf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d22b8cf3f9a8fc1bee5c39a22230a9e18a42fc9318dfe838cbcc5981e9abbf5->enter($__internal_9d22b8cf3f9a8fc1bee5c39a22230a9e18a42fc9318dfe838cbcc5981e9abbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4c8d263c0105a75d6f61ede4f418a9258b77339854d8f82e22fb456d15a7f691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8d263c0105a75d6f61ede4f418a9258b77339854d8f82e22fb456d15a7f691->enter($__internal_4c8d263c0105a75d6f61ede4f418a9258b77339854d8f82e22fb456d15a7f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "        
    </body>
</html>
";
        
        $__internal_9d22b8cf3f9a8fc1bee5c39a22230a9e18a42fc9318dfe838cbcc5981e9abbf5->leave($__internal_9d22b8cf3f9a8fc1bee5c39a22230a9e18a42fc9318dfe838cbcc5981e9abbf5_prof);

        
        $__internal_4c8d263c0105a75d6f61ede4f418a9258b77339854d8f82e22fb456d15a7f691->leave($__internal_4c8d263c0105a75d6f61ede4f418a9258b77339854d8f82e22fb456d15a7f691_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa71345b49e8e0444086797fd37b38592f53845a586a98bfc9310f4776609723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa71345b49e8e0444086797fd37b38592f53845a586a98bfc9310f4776609723->enter($__internal_fa71345b49e8e0444086797fd37b38592f53845a586a98bfc9310f4776609723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3bf10062a4a5f0dcd19b1903dae2f4fd00da57ee6bc6769e96aab4c7515df467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf10062a4a5f0dcd19b1903dae2f4fd00da57ee6bc6769e96aab4c7515df467->enter($__internal_3bf10062a4a5f0dcd19b1903dae2f4fd00da57ee6bc6769e96aab4c7515df467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3bf10062a4a5f0dcd19b1903dae2f4fd00da57ee6bc6769e96aab4c7515df467->leave($__internal_3bf10062a4a5f0dcd19b1903dae2f4fd00da57ee6bc6769e96aab4c7515df467_prof);

        
        $__internal_fa71345b49e8e0444086797fd37b38592f53845a586a98bfc9310f4776609723->leave($__internal_fa71345b49e8e0444086797fd37b38592f53845a586a98bfc9310f4776609723_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22eefd7934f133439d4d275f97b07739fae9bd45fb059d3c9234f7f04384d538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22eefd7934f133439d4d275f97b07739fae9bd45fb059d3c9234f7f04384d538->enter($__internal_22eefd7934f133439d4d275f97b07739fae9bd45fb059d3c9234f7f04384d538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ee2c1286ae8c7efcdc79f7932e9d97d38d2e155daed68838ce9fa7b0dfd1f4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2c1286ae8c7efcdc79f7932e9d97d38d2e155daed68838ce9fa7b0dfd1f4f6->enter($__internal_ee2c1286ae8c7efcdc79f7932e9d97d38d2e155daed68838ce9fa7b0dfd1f4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ee2c1286ae8c7efcdc79f7932e9d97d38d2e155daed68838ce9fa7b0dfd1f4f6->leave($__internal_ee2c1286ae8c7efcdc79f7932e9d97d38d2e155daed68838ce9fa7b0dfd1f4f6_prof);

        
        $__internal_22eefd7934f133439d4d275f97b07739fae9bd45fb059d3c9234f7f04384d538->leave($__internal_22eefd7934f133439d4d275f97b07739fae9bd45fb059d3c9234f7f04384d538_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6b1ab6fc969507ab26f887c488fb654d464ccb27642afdeafd5caa0f62cfac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b1ab6fc969507ab26f887c488fb654d464ccb27642afdeafd5caa0f62cfac2->enter($__internal_c6b1ab6fc969507ab26f887c488fb654d464ccb27642afdeafd5caa0f62cfac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5836e41b6a1550e74ba00d6a7d5b682a2bd36fb968d5f36cd7980c1b0a7351c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5836e41b6a1550e74ba00d6a7d5b682a2bd36fb968d5f36cd7980c1b0a7351c->enter($__internal_f5836e41b6a1550e74ba00d6a7d5b682a2bd36fb968d5f36cd7980c1b0a7351c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5836e41b6a1550e74ba00d6a7d5b682a2bd36fb968d5f36cd7980c1b0a7351c->leave($__internal_f5836e41b6a1550e74ba00d6a7d5b682a2bd36fb968d5f36cd7980c1b0a7351c_prof);

        
        $__internal_c6b1ab6fc969507ab26f887c488fb654d464ccb27642afdeafd5caa0f62cfac2->leave($__internal_c6b1ab6fc969507ab26f887c488fb654d464ccb27642afdeafd5caa0f62cfac2_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d7982b6b3c90f160033a80736009f9272cad8196df8fa5390b876b4efa82d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7982b6b3c90f160033a80736009f9272cad8196df8fa5390b876b4efa82d41->enter($__internal_3d7982b6b3c90f160033a80736009f9272cad8196df8fa5390b876b4efa82d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4daf6e68aef2333939f9321ab71b5b824d01070ed4addff289cbb93a35743f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4daf6e68aef2333939f9321ab71b5b824d01070ed4addff289cbb93a35743f17->enter($__internal_4daf6e68aef2333939f9321ab71b5b824d01070ed4addff289cbb93a35743f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4daf6e68aef2333939f9321ab71b5b824d01070ed4addff289cbb93a35743f17->leave($__internal_4daf6e68aef2333939f9321ab71b5b824d01070ed4addff289cbb93a35743f17_prof);

        
        $__internal_3d7982b6b3c90f160033a80736009f9272cad8196df8fa5390b876b4efa82d41->leave($__internal_3d7982b6b3c90f160033a80736009f9272cad8196df8fa5390b876b4efa82d41_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 16,  115 => 15,  103 => 10,  99 => 9,  94 => 8,  85 => 7,  67 => 6,  54 => 17,  51 => 16,  49 => 15,  42 => 12,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\base.html.twig");
    }
}
