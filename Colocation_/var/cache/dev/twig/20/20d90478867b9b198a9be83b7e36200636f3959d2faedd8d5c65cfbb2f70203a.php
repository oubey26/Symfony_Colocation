<?php

/* base.html.twig */
class __TwigTemplate_3f5e5790523aa5f4e7fa9b739a3d42a8f85d4709d782f1040e2c248fbddf010e extends Twig_Template
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
        $__internal_62b3e62b1f2d20099a696955b7f9e2c174b386ce0af4b948b5dafbbcf32a8d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b3e62b1f2d20099a696955b7f9e2c174b386ce0af4b948b5dafbbcf32a8d93->enter($__internal_62b3e62b1f2d20099a696955b7f9e2c174b386ce0af4b948b5dafbbcf32a8d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3f2e0dda8232d13dec2abdcecd366558725b6571ab44e76254b0af91efce41f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2e0dda8232d13dec2abdcecd366558725b6571ab44e76254b0af91efce41f5->enter($__internal_3f2e0dda8232d13dec2abdcecd366558725b6571ab44e76254b0af91efce41f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_62b3e62b1f2d20099a696955b7f9e2c174b386ce0af4b948b5dafbbcf32a8d93->leave($__internal_62b3e62b1f2d20099a696955b7f9e2c174b386ce0af4b948b5dafbbcf32a8d93_prof);

        
        $__internal_3f2e0dda8232d13dec2abdcecd366558725b6571ab44e76254b0af91efce41f5->leave($__internal_3f2e0dda8232d13dec2abdcecd366558725b6571ab44e76254b0af91efce41f5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_98db77069d2d1a6978bc15b6631bb3b9c7dc031a70c30a9111a8d7a0ceb77bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98db77069d2d1a6978bc15b6631bb3b9c7dc031a70c30a9111a8d7a0ceb77bcd->enter($__internal_98db77069d2d1a6978bc15b6631bb3b9c7dc031a70c30a9111a8d7a0ceb77bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c776e063372b6ad6f303ea3a4629492fc872ddea0f9ff07b0bc961e2bcfd6a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c776e063372b6ad6f303ea3a4629492fc872ddea0f9ff07b0bc961e2bcfd6a88->enter($__internal_c776e063372b6ad6f303ea3a4629492fc872ddea0f9ff07b0bc961e2bcfd6a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c776e063372b6ad6f303ea3a4629492fc872ddea0f9ff07b0bc961e2bcfd6a88->leave($__internal_c776e063372b6ad6f303ea3a4629492fc872ddea0f9ff07b0bc961e2bcfd6a88_prof);

        
        $__internal_98db77069d2d1a6978bc15b6631bb3b9c7dc031a70c30a9111a8d7a0ceb77bcd->leave($__internal_98db77069d2d1a6978bc15b6631bb3b9c7dc031a70c30a9111a8d7a0ceb77bcd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0741854eaf59a5f5abd98893b41d01c334d414fc8630260fc82b2ea544983bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0741854eaf59a5f5abd98893b41d01c334d414fc8630260fc82b2ea544983bf2->enter($__internal_0741854eaf59a5f5abd98893b41d01c334d414fc8630260fc82b2ea544983bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_39e094f62efb831392fc1244cef62598e2f1bae85681ccb58be806132c2a8204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e094f62efb831392fc1244cef62598e2f1bae85681ccb58be806132c2a8204->enter($__internal_39e094f62efb831392fc1244cef62598e2f1bae85681ccb58be806132c2a8204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_39e094f62efb831392fc1244cef62598e2f1bae85681ccb58be806132c2a8204->leave($__internal_39e094f62efb831392fc1244cef62598e2f1bae85681ccb58be806132c2a8204_prof);

        
        $__internal_0741854eaf59a5f5abd98893b41d01c334d414fc8630260fc82b2ea544983bf2->leave($__internal_0741854eaf59a5f5abd98893b41d01c334d414fc8630260fc82b2ea544983bf2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_89433e73344b76983d98c037a7e6da9533410b609b73722ab2b2ab9c537f26e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89433e73344b76983d98c037a7e6da9533410b609b73722ab2b2ab9c537f26e1->enter($__internal_89433e73344b76983d98c037a7e6da9533410b609b73722ab2b2ab9c537f26e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8a1ca68ec1deacdac83c6a5fa2f1bd30c7d67d989a4df153fe689b18389d258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a1ca68ec1deacdac83c6a5fa2f1bd30c7d67d989a4df153fe689b18389d258->enter($__internal_f8a1ca68ec1deacdac83c6a5fa2f1bd30c7d67d989a4df153fe689b18389d258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8a1ca68ec1deacdac83c6a5fa2f1bd30c7d67d989a4df153fe689b18389d258->leave($__internal_f8a1ca68ec1deacdac83c6a5fa2f1bd30c7d67d989a4df153fe689b18389d258_prof);

        
        $__internal_89433e73344b76983d98c037a7e6da9533410b609b73722ab2b2ab9c537f26e1->leave($__internal_89433e73344b76983d98c037a7e6da9533410b609b73722ab2b2ab9c537f26e1_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3acb220b2a19ffd60ef343fd0360a506d882abda29dbed5b6243d51ba707384b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acb220b2a19ffd60ef343fd0360a506d882abda29dbed5b6243d51ba707384b->enter($__internal_3acb220b2a19ffd60ef343fd0360a506d882abda29dbed5b6243d51ba707384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f28a3637436361d74e3203af9923196297a64686c3c0eea5bed6419f790b5b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28a3637436361d74e3203af9923196297a64686c3c0eea5bed6419f790b5b4e->enter($__internal_f28a3637436361d74e3203af9923196297a64686c3c0eea5bed6419f790b5b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f28a3637436361d74e3203af9923196297a64686c3c0eea5bed6419f790b5b4e->leave($__internal_f28a3637436361d74e3203af9923196297a64686c3c0eea5bed6419f790b5b4e_prof);

        
        $__internal_3acb220b2a19ffd60ef343fd0360a506d882abda29dbed5b6243d51ba707384b->leave($__internal_3acb220b2a19ffd60ef343fd0360a506d882abda29dbed5b6243d51ba707384b_prof);

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
