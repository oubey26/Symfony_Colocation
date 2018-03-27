<?php

/* ::base.html.twig */
class __TwigTemplate_e99eb08ba334a7f8aa2e82b08a92f83baf004c1e62e1cee2f8f08d89f0cf1b85 extends Twig_Template
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
        $__internal_530d607cec237491a02b6e9cd577368f3d3152a79cdf6d7a4f131246d39ffd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530d607cec237491a02b6e9cd577368f3d3152a79cdf6d7a4f131246d39ffd3d->enter($__internal_530d607cec237491a02b6e9cd577368f3d3152a79cdf6d7a4f131246d39ffd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8fadc32b4f412c95b5cdcf94300736fd1956943b2299ba3300ab9a96fbd776c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fadc32b4f412c95b5cdcf94300736fd1956943b2299ba3300ab9a96fbd776c8->enter($__internal_8fadc32b4f412c95b5cdcf94300736fd1956943b2299ba3300ab9a96fbd776c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_530d607cec237491a02b6e9cd577368f3d3152a79cdf6d7a4f131246d39ffd3d->leave($__internal_530d607cec237491a02b6e9cd577368f3d3152a79cdf6d7a4f131246d39ffd3d_prof);

        
        $__internal_8fadc32b4f412c95b5cdcf94300736fd1956943b2299ba3300ab9a96fbd776c8->leave($__internal_8fadc32b4f412c95b5cdcf94300736fd1956943b2299ba3300ab9a96fbd776c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e76423ea697ee37bca46937e1367aa8875ddbbafed6ec32de6eb6d1c3357678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e76423ea697ee37bca46937e1367aa8875ddbbafed6ec32de6eb6d1c3357678->enter($__internal_9e76423ea697ee37bca46937e1367aa8875ddbbafed6ec32de6eb6d1c3357678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bae1a45b0628aad75252144c431490695d8326f154dc654857ea5bfb753cf4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bae1a45b0628aad75252144c431490695d8326f154dc654857ea5bfb753cf4c->enter($__internal_1bae1a45b0628aad75252144c431490695d8326f154dc654857ea5bfb753cf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1bae1a45b0628aad75252144c431490695d8326f154dc654857ea5bfb753cf4c->leave($__internal_1bae1a45b0628aad75252144c431490695d8326f154dc654857ea5bfb753cf4c_prof);

        
        $__internal_9e76423ea697ee37bca46937e1367aa8875ddbbafed6ec32de6eb6d1c3357678->leave($__internal_9e76423ea697ee37bca46937e1367aa8875ddbbafed6ec32de6eb6d1c3357678_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03298aa2fefc1d56ecf5bd88aa0f4edcf919312412ad0e646171b86b434ba970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03298aa2fefc1d56ecf5bd88aa0f4edcf919312412ad0e646171b86b434ba970->enter($__internal_03298aa2fefc1d56ecf5bd88aa0f4edcf919312412ad0e646171b86b434ba970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3340a2086c13f2d6ebf55dbd98c9b193440eb1054c24024549332d9db74f46ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3340a2086c13f2d6ebf55dbd98c9b193440eb1054c24024549332d9db74f46ea->enter($__internal_3340a2086c13f2d6ebf55dbd98c9b193440eb1054c24024549332d9db74f46ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3340a2086c13f2d6ebf55dbd98c9b193440eb1054c24024549332d9db74f46ea->leave($__internal_3340a2086c13f2d6ebf55dbd98c9b193440eb1054c24024549332d9db74f46ea_prof);

        
        $__internal_03298aa2fefc1d56ecf5bd88aa0f4edcf919312412ad0e646171b86b434ba970->leave($__internal_03298aa2fefc1d56ecf5bd88aa0f4edcf919312412ad0e646171b86b434ba970_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4f9ba2f7336d37ebfa11e33092c1e4b746ec2a33a0100f248a88bb75ec3eae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f9ba2f7336d37ebfa11e33092c1e4b746ec2a33a0100f248a88bb75ec3eae2->enter($__internal_a4f9ba2f7336d37ebfa11e33092c1e4b746ec2a33a0100f248a88bb75ec3eae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41fb07c6036b60e80bfb7b371123f1a183384ffea6ffdf5fc53efe50374ee598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fb07c6036b60e80bfb7b371123f1a183384ffea6ffdf5fc53efe50374ee598->enter($__internal_41fb07c6036b60e80bfb7b371123f1a183384ffea6ffdf5fc53efe50374ee598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41fb07c6036b60e80bfb7b371123f1a183384ffea6ffdf5fc53efe50374ee598->leave($__internal_41fb07c6036b60e80bfb7b371123f1a183384ffea6ffdf5fc53efe50374ee598_prof);

        
        $__internal_a4f9ba2f7336d37ebfa11e33092c1e4b746ec2a33a0100f248a88bb75ec3eae2->leave($__internal_a4f9ba2f7336d37ebfa11e33092c1e4b746ec2a33a0100f248a88bb75ec3eae2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d1b40002193c1057627c0e69384afdbfddcc6c086820c19386ea9ab58f0da23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1b40002193c1057627c0e69384afdbfddcc6c086820c19386ea9ab58f0da23->enter($__internal_8d1b40002193c1057627c0e69384afdbfddcc6c086820c19386ea9ab58f0da23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_11f308050d0da5d3e059c6406f30fc3fb30d14d91cf81ad1fed76922b053b377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f308050d0da5d3e059c6406f30fc3fb30d14d91cf81ad1fed76922b053b377->enter($__internal_11f308050d0da5d3e059c6406f30fc3fb30d14d91cf81ad1fed76922b053b377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_11f308050d0da5d3e059c6406f30fc3fb30d14d91cf81ad1fed76922b053b377->leave($__internal_11f308050d0da5d3e059c6406f30fc3fb30d14d91cf81ad1fed76922b053b377_prof);

        
        $__internal_8d1b40002193c1057627c0e69384afdbfddcc6c086820c19386ea9ab58f0da23->leave($__internal_8d1b40002193c1057627c0e69384afdbfddcc6c086820c19386ea9ab58f0da23_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/base.html.twig");
    }
}
