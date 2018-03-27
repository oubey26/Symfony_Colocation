<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7b8b376f2e31962cf5c39b38db5d1579c1442fab6c71361de3025371b7df7c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f08e00e4c99533d51253efb2f7c9ec343c502aa9c47af61652fcec5d894beb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f08e00e4c99533d51253efb2f7c9ec343c502aa9c47af61652fcec5d894beb8->enter($__internal_1f08e00e4c99533d51253efb2f7c9ec343c502aa9c47af61652fcec5d894beb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9bb2b0068751000dccb993bb56637910f1f299c607ceff4eb897a1f39df073a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb2b0068751000dccb993bb56637910f1f299c607ceff4eb897a1f39df073a1->enter($__internal_9bb2b0068751000dccb993bb56637910f1f299c607ceff4eb897a1f39df073a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1f08e00e4c99533d51253efb2f7c9ec343c502aa9c47af61652fcec5d894beb8->leave($__internal_1f08e00e4c99533d51253efb2f7c9ec343c502aa9c47af61652fcec5d894beb8_prof);

        
        $__internal_9bb2b0068751000dccb993bb56637910f1f299c607ceff4eb897a1f39df073a1->leave($__internal_9bb2b0068751000dccb993bb56637910f1f299c607ceff4eb897a1f39df073a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
