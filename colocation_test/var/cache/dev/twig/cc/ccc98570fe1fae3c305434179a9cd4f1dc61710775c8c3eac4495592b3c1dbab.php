<?php

/* base.html.twig */
class __TwigTemplate_3596e0743f6caebb4b1bf204a8165ae17ef42ac14157831b8276cacab8b268e3 extends Twig_Template
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
        $__internal_06c24ae2291454c85699238268bf8c14f5546de7170263630e51d844072e0baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c24ae2291454c85699238268bf8c14f5546de7170263630e51d844072e0baa->enter($__internal_06c24ae2291454c85699238268bf8c14f5546de7170263630e51d844072e0baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_48e215b68ec6843d37dc0e57873efcd857988f49f24614b8c01e973e42bdf0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e215b68ec6843d37dc0e57873efcd857988f49f24614b8c01e973e42bdf0dc->enter($__internal_48e215b68ec6843d37dc0e57873efcd857988f49f24614b8c01e973e42bdf0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_06c24ae2291454c85699238268bf8c14f5546de7170263630e51d844072e0baa->leave($__internal_06c24ae2291454c85699238268bf8c14f5546de7170263630e51d844072e0baa_prof);

        
        $__internal_48e215b68ec6843d37dc0e57873efcd857988f49f24614b8c01e973e42bdf0dc->leave($__internal_48e215b68ec6843d37dc0e57873efcd857988f49f24614b8c01e973e42bdf0dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dfbf4ed42e64bdcf056ce2bb49af64e33f7c7386ad1e9856b5bfbd7459da136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dfbf4ed42e64bdcf056ce2bb49af64e33f7c7386ad1e9856b5bfbd7459da136->enter($__internal_4dfbf4ed42e64bdcf056ce2bb49af64e33f7c7386ad1e9856b5bfbd7459da136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8f23d38a3be16dfb5644eff62ea68e546248184ccd8b82898caa42644eb51a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f23d38a3be16dfb5644eff62ea68e546248184ccd8b82898caa42644eb51a8->enter($__internal_c8f23d38a3be16dfb5644eff62ea68e546248184ccd8b82898caa42644eb51a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8f23d38a3be16dfb5644eff62ea68e546248184ccd8b82898caa42644eb51a8->leave($__internal_c8f23d38a3be16dfb5644eff62ea68e546248184ccd8b82898caa42644eb51a8_prof);

        
        $__internal_4dfbf4ed42e64bdcf056ce2bb49af64e33f7c7386ad1e9856b5bfbd7459da136->leave($__internal_4dfbf4ed42e64bdcf056ce2bb49af64e33f7c7386ad1e9856b5bfbd7459da136_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6d7cd8fb2186ef92f3f84f312c852718c12076aaf55b77d1f5b14686b672450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d7cd8fb2186ef92f3f84f312c852718c12076aaf55b77d1f5b14686b672450->enter($__internal_d6d7cd8fb2186ef92f3f84f312c852718c12076aaf55b77d1f5b14686b672450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6de7aa7a29e4fe2093424cf8599158548276f016a3a9fb44187bb826b347dbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de7aa7a29e4fe2093424cf8599158548276f016a3a9fb44187bb826b347dbce->enter($__internal_6de7aa7a29e4fe2093424cf8599158548276f016a3a9fb44187bb826b347dbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6de7aa7a29e4fe2093424cf8599158548276f016a3a9fb44187bb826b347dbce->leave($__internal_6de7aa7a29e4fe2093424cf8599158548276f016a3a9fb44187bb826b347dbce_prof);

        
        $__internal_d6d7cd8fb2186ef92f3f84f312c852718c12076aaf55b77d1f5b14686b672450->leave($__internal_d6d7cd8fb2186ef92f3f84f312c852718c12076aaf55b77d1f5b14686b672450_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a1f551da818586ae8baff21a4dbf52a0ade1dd3f77612bfe22a14a38ed1fabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1f551da818586ae8baff21a4dbf52a0ade1dd3f77612bfe22a14a38ed1fabf->enter($__internal_8a1f551da818586ae8baff21a4dbf52a0ade1dd3f77612bfe22a14a38ed1fabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e575d1a061982496c692a80712d0bd8be2c99af50a90d16bcb0213d78e494cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e575d1a061982496c692a80712d0bd8be2c99af50a90d16bcb0213d78e494cec->enter($__internal_e575d1a061982496c692a80712d0bd8be2c99af50a90d16bcb0213d78e494cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e575d1a061982496c692a80712d0bd8be2c99af50a90d16bcb0213d78e494cec->leave($__internal_e575d1a061982496c692a80712d0bd8be2c99af50a90d16bcb0213d78e494cec_prof);

        
        $__internal_8a1f551da818586ae8baff21a4dbf52a0ade1dd3f77612bfe22a14a38ed1fabf->leave($__internal_8a1f551da818586ae8baff21a4dbf52a0ade1dd3f77612bfe22a14a38ed1fabf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_603ec39aa2d796e8831bceca23cfad95098b947ccc9b90bb2023dd3721c5cbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603ec39aa2d796e8831bceca23cfad95098b947ccc9b90bb2023dd3721c5cbf6->enter($__internal_603ec39aa2d796e8831bceca23cfad95098b947ccc9b90bb2023dd3721c5cbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27e3e0b995e4faafc20fd729fd93010a3b2aa992d30a4ed1c7bdfffe96d305ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e3e0b995e4faafc20fd729fd93010a3b2aa992d30a4ed1c7bdfffe96d305ba->enter($__internal_27e3e0b995e4faafc20fd729fd93010a3b2aa992d30a4ed1c7bdfffe96d305ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_27e3e0b995e4faafc20fd729fd93010a3b2aa992d30a4ed1c7bdfffe96d305ba->leave($__internal_27e3e0b995e4faafc20fd729fd93010a3b2aa992d30a4ed1c7bdfffe96d305ba_prof);

        
        $__internal_603ec39aa2d796e8831bceca23cfad95098b947ccc9b90bb2023dd3721c5cbf6->leave($__internal_603ec39aa2d796e8831bceca23cfad95098b947ccc9b90bb2023dd3721c5cbf6_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\colocation_test\\app\\Resources\\views\\base.html.twig");
    }
}
