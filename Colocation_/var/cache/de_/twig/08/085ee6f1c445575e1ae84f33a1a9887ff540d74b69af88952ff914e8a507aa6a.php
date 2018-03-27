<?php

/* base.html.twig */
class __TwigTemplate_875c7359e0838083884ce004e8c406e17b344063c2808b9a1f370f6a162c1efd extends Twig_Template
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
        $__internal_3584b68cb589976e91193a084216faf60a709648e3751cb148bf505b3ff686dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3584b68cb589976e91193a084216faf60a709648e3751cb148bf505b3ff686dc->enter($__internal_3584b68cb589976e91193a084216faf60a709648e3751cb148bf505b3ff686dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_30dfd674409e1a0e879011cbb3f9df90c0af8be4a98bf8ef7ca584aaf9f7dc16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30dfd674409e1a0e879011cbb3f9df90c0af8be4a98bf8ef7ca584aaf9f7dc16->enter($__internal_30dfd674409e1a0e879011cbb3f9df90c0af8be4a98bf8ef7ca584aaf9f7dc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3584b68cb589976e91193a084216faf60a709648e3751cb148bf505b3ff686dc->leave($__internal_3584b68cb589976e91193a084216faf60a709648e3751cb148bf505b3ff686dc_prof);

        
        $__internal_30dfd674409e1a0e879011cbb3f9df90c0af8be4a98bf8ef7ca584aaf9f7dc16->leave($__internal_30dfd674409e1a0e879011cbb3f9df90c0af8be4a98bf8ef7ca584aaf9f7dc16_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61a20d59133188f37ebf1b4c7009552d9ccdaab70d9a6dafc0035e95ed9d2ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a20d59133188f37ebf1b4c7009552d9ccdaab70d9a6dafc0035e95ed9d2ebd->enter($__internal_61a20d59133188f37ebf1b4c7009552d9ccdaab70d9a6dafc0035e95ed9d2ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f7db23ddc89bbabec7e9be207b1aaddb0367d6f6647e2fc4d983bc840dcc3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7db23ddc89bbabec7e9be207b1aaddb0367d6f6647e2fc4d983bc840dcc3e6->enter($__internal_7f7db23ddc89bbabec7e9be207b1aaddb0367d6f6647e2fc4d983bc840dcc3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7f7db23ddc89bbabec7e9be207b1aaddb0367d6f6647e2fc4d983bc840dcc3e6->leave($__internal_7f7db23ddc89bbabec7e9be207b1aaddb0367d6f6647e2fc4d983bc840dcc3e6_prof);

        
        $__internal_61a20d59133188f37ebf1b4c7009552d9ccdaab70d9a6dafc0035e95ed9d2ebd->leave($__internal_61a20d59133188f37ebf1b4c7009552d9ccdaab70d9a6dafc0035e95ed9d2ebd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d14059b2dc2062704faac9edfee185e5931f8dfeb3c7fa495a6ea98b21606142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14059b2dc2062704faac9edfee185e5931f8dfeb3c7fa495a6ea98b21606142->enter($__internal_d14059b2dc2062704faac9edfee185e5931f8dfeb3c7fa495a6ea98b21606142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f90a9eff06e5b7e3aa840640677b5afc7ecac02737e32603cc0d75330cbcb979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90a9eff06e5b7e3aa840640677b5afc7ecac02737e32603cc0d75330cbcb979->enter($__internal_f90a9eff06e5b7e3aa840640677b5afc7ecac02737e32603cc0d75330cbcb979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f90a9eff06e5b7e3aa840640677b5afc7ecac02737e32603cc0d75330cbcb979->leave($__internal_f90a9eff06e5b7e3aa840640677b5afc7ecac02737e32603cc0d75330cbcb979_prof);

        
        $__internal_d14059b2dc2062704faac9edfee185e5931f8dfeb3c7fa495a6ea98b21606142->leave($__internal_d14059b2dc2062704faac9edfee185e5931f8dfeb3c7fa495a6ea98b21606142_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a473965980c2bf93b097835c3d67877b2b964312b9875d98eb349343b84ce665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a473965980c2bf93b097835c3d67877b2b964312b9875d98eb349343b84ce665->enter($__internal_a473965980c2bf93b097835c3d67877b2b964312b9875d98eb349343b84ce665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89f6600321d920b57b7a4fc188a24839a8796e4ee84c987129c0fbffb6cca2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f6600321d920b57b7a4fc188a24839a8796e4ee84c987129c0fbffb6cca2af->enter($__internal_89f6600321d920b57b7a4fc188a24839a8796e4ee84c987129c0fbffb6cca2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_89f6600321d920b57b7a4fc188a24839a8796e4ee84c987129c0fbffb6cca2af->leave($__internal_89f6600321d920b57b7a4fc188a24839a8796e4ee84c987129c0fbffb6cca2af_prof);

        
        $__internal_a473965980c2bf93b097835c3d67877b2b964312b9875d98eb349343b84ce665->leave($__internal_a473965980c2bf93b097835c3d67877b2b964312b9875d98eb349343b84ce665_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_092020ce4b855bce655662c213aa55e18ba64800ccd6b6a0b796b0643ac8e179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092020ce4b855bce655662c213aa55e18ba64800ccd6b6a0b796b0643ac8e179->enter($__internal_092020ce4b855bce655662c213aa55e18ba64800ccd6b6a0b796b0643ac8e179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_88fdc6c644e272fa987f145b4fe18881398806ca04f4c4d12e3cc78c3abf0cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fdc6c644e272fa987f145b4fe18881398806ca04f4c4d12e3cc78c3abf0cd0->enter($__internal_88fdc6c644e272fa987f145b4fe18881398806ca04f4c4d12e3cc78c3abf0cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_88fdc6c644e272fa987f145b4fe18881398806ca04f4c4d12e3cc78c3abf0cd0->leave($__internal_88fdc6c644e272fa987f145b4fe18881398806ca04f4c4d12e3cc78c3abf0cd0_prof);

        
        $__internal_092020ce4b855bce655662c213aa55e18ba64800ccd6b6a0b796b0643ac8e179->leave($__internal_092020ce4b855bce655662c213aa55e18ba64800ccd6b6a0b796b0643ac8e179_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\base.html.twig");
    }
}
